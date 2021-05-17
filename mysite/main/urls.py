from . import views
from django.urls import path, include
from django.conf.urls import url

app_name = 'main'

urlpatterns = [
    path('', views.TrangChu, name='Trang Chu'),
    url('TrangChu', views.TrangChu, name='Trang Chu'),
    url('DsSanPham', views.DsSanPham, name='DsSanPham'),
    url('ThongTin', views.ThongTin, name='ThongTin'),
    url('GioHang', views.GioHang, name='GioHang'),
    url('TheHienChiTietGioHang', views.TheHienChiTietGioHang, name='TheHienChiTietGioHang'),
    url('TheHienSanPham', views.TheHienSanPham, name='TheHienSanPham'),
]