function main(args) {
  return {
    body: `
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
        Happy birthday, Meenah! 🎉 Today, the world celebrates the incredible person you are.<br/><br/>
        My love for you grows with every passing day, just like the brightness of your smile. You fill my life with joy, and I cherish every moment we share.<br/><br/>
        May this day be as beautiful as you are, and may our love continue to flourish. Here's to many more birthdays together. I love you more than words can express. 💕🎂😘
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
    `
  };
}
  