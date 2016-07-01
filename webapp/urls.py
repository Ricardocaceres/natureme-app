#import django function url
from django.conf.urls import include, url
#from within the same(webapp) file import views
from . import views

urlpatterns = [
	#Booking Page, assigning a view  called bookings, 
	url(r'^$', views.booking, name = 'booking'), 

]