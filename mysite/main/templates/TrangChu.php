{% load static %}
{% block content %}
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Home Page</title>
  <link rel="stylesheet" href="{% static 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' %}" />
  <link rel="stylesheet" href="{% static '/css/Frame.css' %}" />
  <link rel="stylesheet" href="{% static '/css/ColumnThongTin.css' %}" />
  <link rel="stylesheet" href="{% static '/css/TrangChu.css' %}" />
  <script type="text/javascript" language="javascript" src="{% static '/js/Frame.js' %}"></script>
</head>

<body id="">
  <?php include_once('head.php'); ?>
  <div style="padding-top: 100px;">
    <div class="Black">
      <div class="col-container">
        <div class="col">
          <table id="wrapper">
            <tr>
              <td><img src="{% static '/images/logo.png' %}" alt="" style="width: 315px;" /></td>
            </tr>
          </table>
        </div>

        <div class="col">
          <div class="grid-container">
          <a href="DsSanPham.php?maloai=1"><div class="grid-item"><i class="fa fa-keyboard-o" style="font-size:36px"></i></div></a>
          <a href="DsSanPham.php?maloai=2"><div class="grid-item"><i class="fa fa-mouse-pointer" style="font-size:36px"></i></div></a>
          <a href="DsSanPham.php?maloai=3"><div class="grid-item"><i class="fa fa-laptop" style="font-size:36px"></i></div></a>
          <a href="DsSanPham.php?maloai=4"><div class="grid-item"><i class="fa fa-desktop" style="font-size:36px"></i></div></a>
          </div>
        </div>
      </div>
    </div>
    <div class="Blue">
      <div class="col-container">
        <div class="col">
          <div class="card">
            <img src="{% static 'https://scontent.fvca1-1.fna.fbcdn.net/v/t1.0-9/83093220_2579719802292374_7776371630528297094_o.jpg?_nc_cat=103&ccb=2&_nc_sid=09cbfe&_nc_ohc=Yet_TVED_5gAX-q6jVF&_nc_ht=scontent.fvca1-1.fna&oh=136b382c17a05c183741f3214cdb6249&oe=60249C08' %}" alt="Avatar" style="width:150px;border-radius: 50%;">
            <div class="container">
              <h4><b>Anonymous</b></h4>
              <div>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </div>
              <div class="reviewcard">Bán hàng như ăn cướp, hãy tẩy chay shop này đi mọi người ơi. VOTE 1 SAO</div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="{% static 'https://scontent.fvca1-1.fna.fbcdn.net/v/t1.0-9/83093220_2579719802292374_7776371630528297094_o.jpg?_nc_cat=103&ccb=2&_nc_sid=09cbfe&_nc_ohc=Yet_TVED_5gAX-q6jVF&_nc_ht=scontent.fvca1-1.fna&oh=136b382c17a05c183741f3214cdb6249&oe=60249C08' %}" alt="Avatar" style="height:150px;width:150px;border-radius: 50%;">
            <div class="container">
              <h4><b>L.N</b></h4>
              <div>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
              </div>
              <div class="reviewcard">Web này bán gear xịn, mình chắc chắn sẽ mua tiếp vào một ngày không xa</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <?php include_once('footer.php'); ?>
</body>

</html>

{% endblock %}
