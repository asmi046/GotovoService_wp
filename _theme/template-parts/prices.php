

<section class="prices">
    <div class="_container">
        <h2>Цены на услуги</h2>
        <div class="d_flex f_col">
            <div class="selector d_flex ower_scroll m_b_22">
                <a class="gray_bg brad_12 select_btn" href="#"><span>Ремонт ноутбуков</span></a>
                <a class="gray_bg brad_12 select_btn active" href="#">Ремонт компьютеров</a>
                <a class="gray_bg brad_12 select_btn" href="#">Ремонт телефонов</a>
                <a class="gray_bg brad_12 select_btn" href="#">Ремонт холодильников</a>
                <a class="gray_bg brad_12 select_btn" href="#">Ремонт электроплит</a>
                <a class="gray_bg brad_12 select_btn" href="#">Ремонт электроплит</a>
                <a class="gray_bg brad_12 select_btn" href="#">Ремонт электроплит</a>
            </div>

            <div class="services">

            </div>

        </div>
    </div>
</section>

<script>
let timeline = document.querySelector(".ower_scroll");

timeline.onmousedown = () => {
  let pageX = 0;

  document.onmousemove = e => {
    if (pageX !== 0) {
      timeline.scrollLeft = timeline.scrollLeft + (pageX - e.pageX);
    }
    pageX = e.pageX;
  };

  // заканчиваем выполнение событий
  timeline.onmouseup = () => {
    document.onmousemove = null;
    timeline.onmouseup = null;
  };

  // отменяем браузерный drag
  timeline.ondragstart = () => {
    return false;
  };
};

</script>