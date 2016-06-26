#include get_object_or_404
from django.shortcuts import render, get_object_or_404
#include timezone import used to publish blog
from django.utils import timezone
#Include models that have been written in models.py
#Dot means current directory/application
from .models import Post

#Here is where we will define our views. This means what html files we want to show

#define function to post blogposts
def post_list(request):
	#publish blog posts sorted by 'published date'
	posts=Post.objects.filter(published_date__lte=timezone.now()).order_by('published_date')
	#return function render, brr(request, 'blog/post_list.html', {'posts':posts})
	return render(request, 'blog/post_list.html', {'posts':posts})

def post_detail(request, pk):
	post=get_object_or_404(Post, pk=pk)
	return render(request, 'blog/post_detail.html', {'post':post})

