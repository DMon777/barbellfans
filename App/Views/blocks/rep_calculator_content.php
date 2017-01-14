<div id = "bread_crumbs">
    <a href = "/index">главная /</a>  <span>Калькулятор повторений</span>
</div>

<main>

    <article class="content_block">
        <h1>Калькулятор повторений</h1>

        <p>Данный калькулятор поможет вам узнать максимальный вес с которым вы способны выполнить один повтор в 3-х базовых
       упражнениях - жиме лежа , приседаниях и становой тяге. </p>

        <h3>Жим лежа</h3>

        <table class = "rep_calculator">
            <tr>
                <td>Вес</td>
                <td><input type="text" name = "weight_jim"> </td>
            </tr>
            <tr>
                <td>Количество повторений</td>
                <td><select name = "quantity_jim">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Результат</td>
                <td id = "result_jim"></td>
            </tr>
            <tr>
                <td colspan="2"> <input type="button" class = "button" value="расcчитать" id = "count_jim"></td>
            </tr>
        </table>

        <h3>Приседания</h3>

        <table class = "rep_calculator">
            <tr>
                <td>Вес</td>
                <td><input type="text" name = "weight_squats"> </td>
            </tr>
            <tr>
                <td>Количество повторений</td>
                <td><select name = "quantity_squats">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Результат</td>
                <td id = "result_squats"></td>
            </tr>
            <tr>
                <td colspan="2"> <input type="button" class = "button" value="расcчитать" id = "count_squats"></td>
            </tr>
        </table>


        <h3>Становая тяга</h3>

        <table class = "rep_calculator">
            <tr>
                <td>Вес</td>
                <td><input type="text" name = "weight_lift"> </td>
            </tr>
            <tr>
                <td>Количество повторений</td>
                <td><select name = "quantity_lift">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Результат</td>
                <td id = "result_lift"></td>
            </tr>
            <tr>
                <td colspan="2"> <input type="button" class = "button" value="расcчитать" id = "count_lift"></td>
            </tr>
        </table>

        <div class = "clear"></div>

    </article>

</main>