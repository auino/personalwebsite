from django.conf import settings
from django.contrib import admin
from django.conf.urls import url, static
from django.views.static import serve

# Uncomment the next two lines to enable the admin:
# from django.contrib import admin
#admin.autodiscover()

from app.views import index

urlpatterns = [
    url(r'^$', index, name='home'),
    url(r'^static/(?P<path>.*)$', serve, {'document_root': settings.STATIC_ROOT})
]

urlpatterns += [
]
