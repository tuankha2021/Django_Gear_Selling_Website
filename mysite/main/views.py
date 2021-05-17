from django.shortcuts import render, resolve_url

# Create your views here.
def TrangChu(request):
    return render(request, 'TrangChu.php')

def DsSanPham(request):
    return render(request, 'DsSanPham.php')

def ThongTin(request):
    return render(request, 'ThongTin.php')

def GioHang(request):
    return render(request, 'GioHang.php')

def TheHienChiTietGioHang(request):
    return render(request, 'TheHienChiTietGioHang.php')

def TheHienSanPham(request):
    return render(request, 'TheHienSanPham.php')