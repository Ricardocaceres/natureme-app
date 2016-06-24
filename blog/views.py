from django.shortcuts import render
#include timezone import used to publish blog
from django.utils import timezone
#Include models that have been written in models.py
#Dot means current directory/application
from .models import Post

#define function to post blogposts
def post_list(request):
	#publish blog posts sorted by 'published date'
	Post.objects.filter(published_date__lte=timezone.now()).order_by('published_date')
	#return function render, paremeter request and a template file 'blog/post_list.html'
	#{} add things for template to use
	return render(request, 'blog/post_list.html', {'posts':posts})