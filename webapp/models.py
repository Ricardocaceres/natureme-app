from django.db import models

# Job and Customer models
class Job(models.Model):
	frequency = models.CharField(max_length=50)
	hours=models.IntegerField()
	start_date=models.DateField()
	start_time=models.TimeField()
	comments=models.TextField()

class Customer(models.Model):
	first_name = models.CharField(max_length=50)
	last_name = models.CharField(max_length=50)
	email= models.EmailField(max_length=50)
	mobile=models.IntegerField()
	password=models.CharField(max_length=50)
	address=models.CharField(max_length=200)
	suburb=models.CharField(max_length=50)
	postcode=models.IntegerField()


