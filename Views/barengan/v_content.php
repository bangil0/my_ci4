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
    <div class="data-list">
        <div class="item-top">
            <div class="item">27 April 2020 | 21:30</div>
            <div class="item">AUH - CGK</div>
            
        </div>
        <div class="garis"></div>
        <div class="item-btm">
            <div class="item-person">
                <div class="item">Fulanah bin Fulan</div>
                <div class="item">0505456789</div>
            </div>
            <div class="item">
                <a href="<?= base_url('barengan/create');?>"><i class="fa fa-edit"></i></a>  
                <a href="<?= base_url('barengan/delete');?>"><i class="fa fa-trash"></i></a>
            </div>
        </div>
    </div>
    <div class="data-list">
        <div class="item-top">
            <div class="item">27 April 2020</div>
            <div class="item">21:30</div>
        </div>
        <div class="garis"></div>
        <div class="item-btm">
            <div class="item-person">
                <div class="item">Fulan bin Fulan</div>
                <div class="item">0505456789</div>
            </div>
            <div class="item">AUH - CGK</div>
        </div>
    </div>
    <div class="data-list">
        <div class="item-top">
            <div class="item">27 April 2020 | 21:30</div>
            <div class="item">AUH - CGK</div>
            
        </div>
        <div class="garis"></div>
        <div class="item-btm">
            <div class="item-person">
                <div class="item">Fulan bin Fulan</div>
                <div class="item">0505456789</div>
            </div>
            <div class="item"><i class="fa fa-edit"></i>  <i class="fa fa-trash"></i></div>
        </div>
    </div>
    <div class="data-list">
        <div class="item-top">
            <div class="item">27 April 2020 | 21:30</div>
            <div class="item">AUH - CGK</div>
            
        </div>
        <div class="garis"></div>
        <div class="item-btm">
            <div class="item-person">
                <div class="item">Fulan bin Fulan</div>
                <div class="item">0505456789</div>
            </div>
            <div class="item"><i class="fa fa-edit"></i>  <i class="fa fa-trash"></i></div>
        </div>
    </div>

</div>