{% load static %}
{% block content %}
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Danh sách sản phẩm</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="{% static '/css/Frame.css'%}" type="text/css" />
    <link rel="stylesheet" href="{% static '/css/CardSanPham.css'%}" type="text/css" />
    <link rel="stylesheet" href="{% static '/css/ColumnThongTin.css'%}" />
    <script
      type="text/javascript"
      language="javascript"
      src="{% static '/js/Frame.js'%}"
    ></script>
    <script
      type="text/javascript"
      language="javascript"
      src="{% static '/js/CardSanPham.js'%}"
    ></script>
  </head>
  <body>
  {% include "head.php"%}
    <div class="dssp">
   <!-- include "thehiensanpham.php"%}-->
    </div>
    {% include "footer.php"%}
  </body>
</html>
{% endblock %}
