<!-- Styling -->
<!------------------------------------------------------------------->
<style>
.judul{
    margin-bottom: 15px;
}
.data-list{
    display: grid;
    grid-gap: 5px;
    border: 1px solid #333;
    border-radius: 10px;
    padding: 5px 10px;
    margin-bottom: 10px;
    background-color: #c8d6c5;
}
.item{
    font-size: 0.8em;
    color: blue;
    align-self: center;
}
.item-top, .item-btm{
    display: flex;
    /* flex: 2 1 auto; */
    justify-content: space-between;
}
.garis{
    border-bottom: 1px solid #999;
}
.fa{
    color: #666;
}
</style>

<!-- Content -->
<!------------------------------------------------------------------->
<div data-role="main" class="ui-content">
    <div class="ui-bar ui-bar-a judul">
        <h3>Barengan yuuk..!</h3>
    </div>

    <label for="date">Date:</label>
    <input type="date" name="date" id="date" value="">
    <label for="text-basic">Meskapai:</label>
    <input type="text" name="text-basic" id="text-basic" value="">
    <label for="text-basic">Destinasi:</label>
    <input type="text" name="text-basic" id="text-basic" value="">        
    <label for="text-basic">Tujuan:</label>
    <input type="text" name="text-basic" id="text-basic" value="">      

        <div class="ui-block-a"><input type="submit" value="Submit" data-theme="a"></div>
        <div class="ui-block-b"><input type="reset" value="Reset" data-theme="b"></div>
        

</div>