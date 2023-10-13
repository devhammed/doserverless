<?php

function main(array $args): array
{
    return [
        'body' => '
			<style>
				* {
					margin: 0;
					padding: 0;
					box-sizing: border-box;
					font-family: sans-serif;
					-webkit-tap-highlight-color: transparent;
        		}
        		
				body {
					display: flex;
					align-items: center;
					justify-content: center;
					flex-direction: column;
					gap: 16px;
					padding: 32px;
					min-height: 100vh;
				}
			</style>

			<h1>
				Asake of life! My heart was iron and you were the one with a magnet.<br/>
				Sweet love is when your heart skips a beat at the mere thought of someone.<br/>
				With you, my heart doesn\'t just skip; it dances to the sweetest rhythm, a melody played only for you.<br/>
				So how could I resist falling for you! I love you, pumpkin pie 💕😘!
			</h1>
			
			<script src="https://cdn.jsdelivr.net/npm/tsparticles-confetti@2.12.0/tsparticles.confetti.bundle.min.js"></script>

			<script>
				const defaults = {
				  spread: 360,
				  ticks: 50,
				  gravity: 0,
				  decay: 0.94,
				  startVelocity: 30,
				  shapes: ["star"],
				  colors: ["FFE400", "FFBD00", "E89400", "FFCA6C", "FDFFB8"],
				};
				
				function shoot() {
				  confetti({
				    ...defaults,
				    particleCount: 40,
				    scalar: 1.2,
				    shapes: ["star"],
				  });
				
				  confetti({
				    ...defaults,
				    particleCount: 10,
				    scalar: 0.75,
				    shapes: ["circle"],
				  });
				}

				setTimeout(shoot, 0);
				setTimeout(shoot, 100);
				setTimeout(shoot, 200);
				setTimeout(shoot, 300);
				setTimeout(shoot, 400);
				setTimeout(shoot, 500);
			</script>
		',
    ];
}
