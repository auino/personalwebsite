class CustomCache(object):
	def process_response(self, request, response):
		if request.path.startswith('/static/'):
			response['Cache-Control'] = 'must-revalidate, no-cache'
		return response
