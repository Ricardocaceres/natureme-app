#import django function url
from django.conf.urls import include, url
#from within the same(webapp) file import views
from . import views

urlpatterns = [
	#Booking Page, assigning a view  called bookings, 
	url(r'^booking$', views.booking, name = 'booking'), 
	url(r'^personal_details$', views.personal_details, name = 'personal_details'), 
	#url(r'^payment$', views.payment, name = 'payment'), 
]