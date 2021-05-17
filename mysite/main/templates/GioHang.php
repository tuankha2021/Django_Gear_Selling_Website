{% load static %}
{% block content %}
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Giỏ Hàng</title>
  <link rel="stylesheet" href="{% static 'css/Frame.css'%}" type="text/css" />
  <link rel="stylesheet" href="{% static '/css/ColumnThongTin.css'%}" />
  <link rel="stylesheet" href="{% static '/css/GioHang.css'%}" />
  <script type="text/javascript" language="javascript" src="{% static '/js/Frame.js'%}"></script>
  <script type="text/javascript" language="javascript" src="{% static '/js/Giohang.js'%}"></script>
</head>

<body>
{% include "head.php"%}
  <div class="header" style="margin-top: 100px; margin-bottom: 20px">
    <h1>Giỏ hàng</h1>
  </div>
  <div class="TheHienGioHang">
  {% include "server/TheHienChiTietGioHang.php"%}
  </div>
  <div class="" align=center>
    <button type="button" name="button" class="ThanhToanButton">Thanh toán</button>
  </div>
  {% include "footer.php"%}
</body>

</html>
{% endblock %}