document.addEventListener('DOMContentLoaded', function() {
			// Wrap each letter in a <span>
			const tickerText = document.querySelector('#typewriter-text');
			tickerText.innerHTML = tickerText.textContent.split('').map(char => `<span>${char}</span>`).join('');

			// Apply random distortions to letters
			const letters = document.querySelectorAll('#typewriter-text span');
			letters.forEach(letter => {
				// Random vertical adjustment
				if (Math.random() > 0.5) {
					let randomShift = (Math.random() - 0.5) * 2; // range: -1 to 1
					letter.style.transform = `translateY(${randomShift}px)`;
				}

				// Ghosting effect with random opacity reduction
				if (Math.random() > 0.7) {
					letter.style.opacity = "0.6"; // Adjust this value for stronger/weaker ghosting
				}
			});
		});