from selenium import webdriver 
import time

def VanBan(elements):
    t = []
    for element in elements:
        t.append(element.text)
    return t

driver = webdriver.Edge("C:\\Users\\thanh\\OneDrive\\Desktop\\edgedriver_win64\\msedgedriver.exe")

driver.get('https://sangtacviet.com/truyen/uukanshu/1/47911/52588/')

driver.find_element_by_xpath('//*[@id="mainbar"]/div/div/a').click()

username = 'BachTru'
password = 'ABC@jr123'

time.sleep(2)

driver.find_element_by_xpath('//*[@id="loginform"]/p[2]/input').click()
ele = driver.find_element_by_xpath('//*[@id="loginform"]/p[2]/input')
ele.send_keys(username)

driver.find_element_by_xpath('//*[@id="loginform"]/p[4]/input').click()
ele = driver.find_element_by_xpath('//*[@id="loginform"]/p[4]/input')
ele.send_keys(password)

driver.find_element_by_xpath('/html/body/div[7]/div/div/div/div[3]/button[2]').click()

nb = 0

for i in range(1000):
    time.sleep(25)
    print("checking")
    t = VanBan(driver.find_elements_by_tag_name('i'))
    if "Nhặt bảo" in t:
        driver.find_element_by_xpath("//*[contains(text(), 'Nhặt bảo')]").click()
        time.sleep(2)
        driver.find_element_by_xpath('//*[@id="cModal"]/div/div/div[3]/button').click()
        nb += 1
        print('nhat bao: {}'.format(nb))
    else:
        print('khong co')
    time.sleep(5)
    driver.find_element_by_xpath('//*[@id="navnextbot"]').click()


