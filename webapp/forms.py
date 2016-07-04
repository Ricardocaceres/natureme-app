from django import forms
from .models import Job, Customer

class BookingForm(forms.ModelForm):
	class Meta:
		#which model should we use to create this form
		model = Job 
		#which fields should end up in our form
		fields = ('frequency', 'hours', 'start_date', 'start_time', 'comments',)

class PersonalForm(forms.ModelForm):
	class Meta:
		model = Customer
		fields = ('first_name', 'last_name', 'email', 'mobile', 'password', 'address', 'suburb', 'postcode')