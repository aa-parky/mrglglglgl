document.addEventListener('DOMContentLoaded', function() {

			document.querySelector('#news-ticker').addEventListener('mouseenter', function() {
				document.querySelector('#news-ticker p').style.animationPlayState = 'paused';
			});

			document.querySelector('#news-ticker').addEventListener('mouseleave', function() {
				document.querySelector('#news-ticker p').style.animationPlayState = 'running';
			});

		});