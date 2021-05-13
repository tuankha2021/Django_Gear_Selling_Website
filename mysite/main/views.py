from django.shortcuts import render, resolve_url

# Create your views here.
def TrangChu(request):
    return render(request, 'TrangChu.php')

def DsSanPham(request):
    return render(request, 'DsSanPham.php')