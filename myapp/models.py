from django.db import models

# Create your models here.
class Feature(models.Model):
    name = models.CharField(max_length=100, default=' ')
    details = models.CharField(max_length=500, default=' ')

class Project(models.Model):
    name = models.CharField(max_length=500, default=' ')
    details = models.CharField(max_length=1000, default=' ')
    link = models.CharField(max_length=200, default=' ')
