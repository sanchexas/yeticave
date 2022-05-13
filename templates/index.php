<section class="promo">
    <h2 class="promo__title">Нужен стафф для катки?</h2>
    <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
    <ul class="promo__list">
        <?php
        foreach($categoryArray as $cat) {
            ?><li class="promo__item promo__item--<?=$cat["Image"]?>">
            <a class="promo__link" href="pages/all-lots.html"><?=$cat["category"]?></a>
            </li><?php
        }
        ?>
        <!--заполните этот список из массива категорий-->
        <li class="promo__item promo__item--<??>">
            <a class="promo__link" href="pages/all-lots.html">Имя категории</a>
        </li>
    </ul>
</section>
<section class="lots">
    <div class="lots__header">
        <h2>Открытые лоты</h2>
    </div>
    <ul class="lots__list">
        <!--заполните этот список из массива с товарами-->
        <?php
        foreach ($catAssociativeArray as $cA){
            ?><li class="lots__item lot">
            <div class="lot__image">
                <img src="<?=$cA['imageUrl']?>" width="350" height="260" alt="">
            </div>
            <div class="lot__info">
                <span class="lot__category"><?=$cA["category"]?></span>
                <h3 class="lot__title"><a class="text-link" href="pages/lot.html"><?=$cA["name"] ?></a></h3>
                <div class="lot__state">
                    <div class="lot__rate">
                        <span class="lot__amount">Стартовая Цена</span>
                        <span class="lot__cost"><?=priceFormat($cA['price'])?></span>
                    </div>
                    <div class="lot__timer timer">
                        <?=deadline()?>
                    </div>
                </div>
            </div>
            </li>
        <?php }?>
    </ul>
</section>
