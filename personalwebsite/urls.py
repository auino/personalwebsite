from django.conf import settings
from django.contrib import admin

from django.conf.urls import url, static

# Uncomment the next two lines to enable the admin:
# from django.contrib import admin
#admin.autodiscover()

from app.views import index

urlpatterns = [
    # Examples:
    #url(r'^$', 'personalwebsite.views.index', name='home'),
    #url(r'^$', 'app.views.index', name='home'),
    url(r'^$', include(app.views.index)),
    # url(r'^personalwebsite/', include('personalwebsite.foo.urls')),

    # Uncomment the admin/doc line below to enable admin documentation:
    # url(r'^admin/doc/', include('django.contrib.admindocs.urls')),

    # Uncomment the next line to enable the admin:
    #url(r'^admin/', include(admin.site.urls)),

    #(r'^static/', 'django.views.static.serve', {'document_root': settings.STATIC_ROOT}),
    #static(settings.STATIC_URL, document_root=settings.STATIC_ROOT)
]

urlpatterns += [
    url(r'^static/(?P<path>.*)$', 'django.views.static.serve', {'document_root': settings.STATIC_ROOT})
]
