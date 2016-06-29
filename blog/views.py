#include get_object_or_404
from django.shortcuts import render, get_object_or_404, redirect
#include timezone import used to publish blog
from django.utils import timezone
#Include models that have been written in models.py
#Dot means current directory/application
from .models import Post
from .forms import PostForm
from django.contrib.auth.decorators import login_required




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

@login_required
def post_new(request):
	if request.method == "POST":
		form=PostForm(request.POST)

		if form.is_valid():
			post=form.save(commit=False)
			post.author=request.user
			post.save()
			return redirect('post_detail', pk=post.pk)

	else:
		form = PostForm()
	
	return render(request, 'blog/post_edit.html', {'form':form})

@login_required
def post_edit(request, pk):
    post = get_object_or_404(Post, pk=pk)
    if request.method == "POST":
        form = PostForm(request.POST, instance=post)
        if form.is_valid():
            post = form.save(commit=False)
            post.author = request.user
            post.save()
            return redirect('post_detail', pk=post.pk)
    else:
        form = PostForm(instance=post)
    return render(request, 'blog/post_edit.html', {'form': form})

def post_main(request):
	#publish latest three posts sorted by 'published date'
	#publish blog posts sorted by 'published date' and creating a variable 'posts' for our queryset
	posts=Post.objects.filter(published_date__lte=timezone.now()).order_by('published_date')[0:3]
	#return function render, brr(request, 'blog/post_list.html', {'posts':posts})
	return render(request, 'blog/post_main.html', {'posts':posts})

@login_required
def post_draft_list(request):
    posts = Post.objects.filter(published_date__isnull=True).order_by('created_date')
    return render(request, 'blog/post_draft_list.html', {'posts': posts})

@login_required
def post_publish(request, pk):
    post = get_object_or_404(Post, pk=pk)
    post.publish()
    return redirect('blog.views.post_detail', pk=pk)

@login_required
def post_remove(request, pk):
    post = get_object_or_404(Post, pk=pk)
    post.delete()
    return redirect('blog.views.post_list')