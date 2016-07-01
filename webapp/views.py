from django.shortcuts import render
from .forms import BookingForm

# created a function called bookings that takes a request and return a function render that will render(put together) our template webapp/booking.html
def booking(request):
	form = BookingForm()
	return render(request, 'webapp/booking.html', {'form':form})

