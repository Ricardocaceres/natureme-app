from django.shortcuts import render
from .forms import BookingForm, PersonalForm



# created a function called bookings that takes a request and return a function render that will render(put together) our template webapp/booking.html
def booking(request):
	if request.method == "POST":
		form = BookingForm(request.POST)
		if form.is_valid():
			job = form.save(commit=False)
			job.frequency = request.frequency
			job.hours = request.hours
			job.start_date = request.start_date
			job.start_time = request.start_time
			job.comments = request.comments
			job.save()

	else:
		form = BookingForm()
	return render(request, 'webapp/booking.html', {'form':form})

def personal_details(request):
	if request.method == "POST":
		form = PersonalForm(request.POST)
		if form.is_valid():
			Customer = form.save(commit=False)
			Customer.first_name = request.first_name
			Customer.last_name = request.last_name
			Customer.email = request.email
			Customer.mobile = request.mobile
			Customer.password = request.password
			Customer.address = request.address
			Customer.suburb = request.suburb
			Customer.postcode = request.postcode
			Customer.save()

	else:
		form = PersonalForm()
	return render(request, 'webapp/personal_details.html', {'form': form})

