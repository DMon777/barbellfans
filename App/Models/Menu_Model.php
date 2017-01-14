<?php


namespace App\Models;


class Menu_Model extends Abstract_Model
{

    protected static $instance;

    public static function instance(){
        if(self::$instance instanceof self) {
            return self::$instance;
        }
        return self::$instance = new self;
    }

    public function get_bread_crumbs($category_id){
        $sql = "SELECT title,href FROM menu WHERE id=".$category_id;
        return self::$db->prepared_select($sql)[0];
    }

    public function get_category_parent($title){// как выяснилось функия пока не нужна но удалять пока не буду , вдруг пригодиться.
        $sql = "SELECT parent_id FROM menu WHERE title='$title'";
        $parent_id = self::$db->prepared_select($sql)[0]['parent_id'];
        $sql2 = "SELECT title FROM menu WHERE id=".$parent_id;
        return self::$db->prepared_select($sql2)[0]['title'];
    }

    public function get_category_title($category_name){
        $sql = "SELECT title FROM menu WHERE category_name='$category_name'";
        return self::$db->prepared_select($sql)[0]['title'];
    }

    public function get_category_id($category_name){
        $sql = "SELECT id from menu WHERE category_name='$category_name'";
        return self::$db->prepared_select($sql)[0]['id'];
    }

    public function make_sitemap_tree(){
        $sitemap_tree = $this->make_menu_tree();

        for($i = 0;$i <= count($sitemap_tree);$i++){

            if(count($sitemap_tree[$i]['children']) > 0){

                for($t = 0;$t <= count($sitemap_tree[$i]['children']);$t++){

                    $articles = Articles_Model::instance()->get_articles_by_category_id($sitemap_tree[$i]['children'][$t]['id']);
                    if($articles){
                        $sitemap_tree[$i]['children'][$t]['articles'] = $articles;
                    }
                }
            }
        }
        return $sitemap_tree;
    }


    public function make_menu_tree($start_level = 0){

        $sql = "SELECT * FROM menu WHERE parent_id=".$start_level." ORDER BY sorting ASC";
        $result = self::$db->prepared_select($sql);

        $map =[];
        if(!empty($result)){
            foreach($result as $item)
            {
                $item['children'] = $this->make_menu_tree($item['id']);
                $map[] = $item;
            }
        }
        return $map;
    }


    public function print_menu_tree($map,$parent_categories){
        if(!empty($map)){
            foreach($map as $val):?>

                <ul>
                    <li><?=$val['title'];?>

                        <select name = "change_parents[]">
                            <option value = "0" <?if($val['parent_id'] == 0):?> selected <?endif;?>>
                                Родительская
                            </option>
                            <?foreach($parent_categories as $k => $v):?>

                                <option value = "<?=$v['id']?>" <?if($val['parent_id'] == $v['id']):?> selected <?endif;?> >
                                    <?=$v['title'];?>
                                </option>

                            <?endforeach;?>
                        </select>

                    </li>

                    <li> <? $this->print_menu_tree($val['children'],$parent_categories); ?></li>
                </ul>

                <?php
            endforeach;
        }
        else{
            return false;
        }
    }

    public function print_sorting_menu_tree($map){
        if(!empty($map)){
            echo "<ul class='sortable'>";
            foreach($map as $val):?>
                    <li id = "<?=$val['id'];?>"><?=$val['title'];?>
                     <? $this->print_sorting_menu_tree($val['children']); ?></li>
                <?php
            endforeach;
            echo "</ul >";
        }
        else{
            return false;
        }
    }


    public function get_categories(){
        $sql = "SELECT * FROM menu WHERE href LIKE 'categories%'";
        return self::$db->prepared_select($sql);
    }

    public function get_all_categories(){
        $sql = "SELECT * FROM menu";
        return self::$db->instance()->prepared_select($sql);
    }

    public function category_sorting($sorting,$categories){

        if(!empty($categories)){
            for($i = 0;$i < count($categories);$i++){
                self::$db->pdo_update('menu',['sorting'],[$sorting[$i]],['id' => $categories[$i]['id']]);
            }
        }
    }

    public function change_parent($parent_arr){
        for($i = 1;$i <= count($parent_arr);$i++){
            self::$db->pdo_update('menu',['parent_id'],[$parent_arr[$i-1]],['id' => $i]);
        }
    }

    public function change_menu_name($new_names,$hrefs){
        $i = 0;
       foreach($this->get_all_categories() as $key => $val){
           self::$db->pdo_update('menu',['title'],[$new_names[$i]],['id' => $val['id']]);

           $sql = "SELECT category_name FROM menu WHERE id=".$val['id'];
           $category_name = self::$db->prepared_select($sql)[0]['category_name'];
           if($category_name != ''){
               self::$db->pdo_update('menu',['category_name'],[$hrefs[$i]],['id' => $val['id']]);
               self::$db->pdo_update('menu',['href'],['categories/id/'.$hrefs[$i]],['id' => $val['id']]);
           }
           $i++;
       }
    }

    public function menu_sorting($sorting){

        $sort_arr = explode(",",$sorting);

        for($i = 0;$i < count($sort_arr);$i++){
            $sort = (int)$sort_arr[$i];
            self::$db->pdo_update('menu',['sorting'],[$i],['id' => $sort]);
        }
        return true;
    }



    public function add_category($title,$href,$parent_id = 0){

        $num_sort = count($this->get_parent_categories())+1;

        if($href){
            $full_href = 'categories/id/'.$href;
        }
        else{
            $full_href = '';
        }

        self::$db->pdo_insert('menu',['title','category_name','href','parent_id','sorting'],
            [$title,$href,$full_href,$parent_id,$num_sort]);
    }

    public function delete_category($category_id){
        self::$db->pdo_delete('menu',['id'=>$category_id]);
        self::$db->pdo_delete('categories_subscribe',['category_id'=>$category_id]);
        $sql = "SELECT id FROM menu WHERE parent_id=".(int)$category_id;
        $category_child = self::$db->prepared_select($sql)[0];
        if($category_child){
            $this->delete_category($category_child['id']);
        }
    }

    public function get_parent_categories(){
        $sql = "SELECT * FROM menu WHERE parent_id=0";
        return self::$db->prepared_select($sql);

    }



}