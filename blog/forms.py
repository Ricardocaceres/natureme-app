#importing django forms
from django import forms
#importing our Post model
from .models import Post

#tell django that PostForm is a ModelForm
class PostForm(forms.ModelForm):
	#class Meta to tell django which model should be used to create this form
	class Meta:
		model=Post
		fields=('title','text',)