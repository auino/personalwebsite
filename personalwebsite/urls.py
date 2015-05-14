from django.conf.urls import patterns, include, url
from django.contrib import admin

# Uncomment the next two lines to enable the admin:
# from django.contrib import admin
#admin.autodiscover()

urlpatterns = patterns('',
    # Examples:
    #url(r'^$', 'personalwebsite.views.index', name='home'),
    url(r'^$', 'app.views.index', name='home'),
    # url(r'^personalwebsite/', include('personalwebsite.foo.urls')),

    # Uncomment the admin/doc line below to enable admin documentation:
    # url(r'^admin/doc/', include('django.contrib.admindocs.urls')),

    # Uncomment the next line to enable the admin:
    #url(r'^admin/', include(admin.site.urls)),

    (r'^static/', 'django.views.static.serve', {'document_root': settings.STATIC_ROOT}),
)
