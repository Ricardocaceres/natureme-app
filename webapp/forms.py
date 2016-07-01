from django import forms
from .models import Job

class BookingForm(forms.ModelForm):
	class Meta:
		#which model should we use to create this form
		model = Job
		#which fields should end up in our form
		fields = ('hours', 'start_date', 'start_time', 'comments',)

