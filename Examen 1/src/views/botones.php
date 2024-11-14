<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería de Botones</title>
    <link rel="stylesheet" href="css/web.css">
    <style>
        .buttons-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .button-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-top: 20px;
        }
        .button-item {
            background: #f5f5f5;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="buttons-container">
        <h2>Galería de Botones</h2>
        
        <div class="button-grid">
            <!-- BOTÓN PRIMARIO -->
            <div class="button-item">
                <button class="btn-primary">Botón Primario</button>
                <style>
                    .btn-primary {
                        background: #007bff;
                        color: white;
                        padding: 12px 24px;
                        border: none;
                        border-radius: 4px;
                        cursor: pointer;
                        transition: all 0.3s ease;
                    }
                    .btn-primary:hover {
                        background: #0056b3;
                        transform: translateY(-2px);
                    }
                </style>
            </div>

            <!-- BOTÓN GRADIENTE CON COLOR ALEATORIO -->
            <div class="button-item">
                <button class="btn-gradient" onclick="cambiarColor(this)">Botón Gradiente</button>
                <style>
                    .btn-gradient {
                        background: linear-gradient(45deg, #ff6b6b, #556270);
                        color: white;
                        padding: 12px 24px;
                        border: none;
                        border-radius: 4px;
                        cursor: pointer;
                        transition: all 0.3s ease;
                    }
                    .btn-gradient:hover {
                        transform: translateY(-2px);
                        box-shadow: 0 5px 15px rgba(0,0,0,0.3);
                    }
                </style>
                <script>
                    function cambiarColor(btn) {
                        const color1 = Math.floor(Math.random()*16777215).toString(16);
                        const color2 = Math.floor(Math.random()*16777215).toString(16);
                        btn.style.background = `linear-gradient(45deg, #${color1}, #${color2})`;
                    }
                </script>
            </div>

            <!-- BOTÓN NEÓN -->
            <div class="button-item">
                <button class="btn-neon">Botón Neón</button>
                <style>
                    .btn-neon {
                        background: #000;
                        color: #fff;
                        padding: 12px 24px;
                        border: 2px solid #0ff;
                        border-radius: 4px;
                        cursor: pointer;
                        box-shadow: 0 0 10px #0ff;
                        transition: all 0.3s ease;
                    }
                    .btn-neon:hover {
                        background: #0ff;
                        color: #000;
                        box-shadow: 0 0 20px #0ff;
                    }
                </style>
            </div>

            <!-- BOTÓN PULSANTE -->
            <div class="button-item">
                <button class="btn-pulse">Botón Pulsante</button>
                <style>
                    .btn-pulse {
                        background: #e74c3c;
                        color: white;
                        padding: 12px 24px;
                        border: none;
                        border-radius: 4px;
                        cursor: pointer;
                        animation: pulse 2s infinite;
                    }
                    @keyframes pulse {
                        0% { transform: scale(1); }
                        50% { transform: scale(1.05); }
                        100% { transform: scale(1); }
                    }
                </style>
            </div>

            <!-- BOTÓN GLASSMORPHISM -->
            <div class="button-item">
                <button class="btn-glass">Botón Glass</button>
                <style>
                    .btn-glass {
                        background: rgba(255, 255, 255, 0.2);
                        color: #fff;
                        padding: 12px 24px;
                        border: 1px solid rgba(255, 255, 255, 0.3);
                        border-radius: 4px;
                        backdrop-filter: blur(5px);
                        cursor: pointer;
                        transition: all 0.3s ease;
                    }
                    .btn-glass:hover {
                        background: rgba(255, 255, 255, 0.3);
                        box-shadow: 0 8px 20px rgba(0,0,0,0.2);
                    }
                </style>
            </div>

            <!-- BOTÓN DESLIZANTE -->
            <div class="button-item">
                <button class="btn-slide">Botón Deslizante</button>
                <style>
                    .btn-slide {
                        background: none;
                        color: #2ecc71;
                        padding: 12px 24px;
                        border: 2px solid #2ecc71;
                        border-radius: 4px;
                        cursor: pointer;
                        position: relative;
                        overflow: hidden;
                        z-index: 1;
                    }
                    .btn-slide::before {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: -100%;
                        width: 100%;
                        height: 100%;
                        background: #2ecc71;
                        transition: all 0.3s ease;
                        z-index: -1;
                    }
                    .btn-slide:hover {
                        color: white;
                    }
                    .btn-slide:hover::before {
                        left: 0;
                    }
                </style>
            </div>

            <!-- BOTÓN BORDADO -->
            <div class="button-item">
                <button class="btn-stitched">Botón Bordado</button>
                <style>
                    .btn-stitched {
                        background: #fff;
                        color: #333;
                        padding: 12px 24px;
                        border: 2px dashed #333;
                        border-radius: 10px;
                        box-shadow: 0 0 0 4px #fff, 2px 2px 4px 2px rgba(0,0,0,0.2);
                        cursor: pointer;
                        transition: all 0.3s ease;
                    }
                    .btn-stitched:hover {
                        background: #333;
                        color: #fff;
                    }
                </style>
            </div>

            <!-- BOTÓN RETRO -->
            <div class="button-item">
                <button class="btn-retro">Botón Retro</button>
                <style>
                    .btn-retro {
                        background: #ffd800;
                        color: #000;
                        padding: 12px 24px;
                        border: 3px solid #000;
                        box-shadow: 4px 4px 0 #000;
                        cursor: pointer;
                        transition: all 0.1s ease;
                    }
                    .btn-retro:active {
                        transform: translate(4px, 4px);
                        box-shadow: 0 0 0 #000;
                    }
                </style>
            </div>

            <!-- BOTÓN MINECRAFT -->
            <div class="button-item">
                <button class="btn-minecraft">Minecraft</button>
                <style>
                    .btn-minecraft {
                        background: #40aa4c;
                        color: white;
                        padding: 12px 24px;
                        border: 4px solid #387b44;
                        font-family: 'Courier New', monospace;
                        text-transform: uppercase;
                        cursor: pointer;
                        image-rendering: pixelated;
                    }
                    .btn-minecraft:hover {
                        background: #4ac759;
                        border-color: #40aa4c;
                    }
                </style>
            </div>

            <!-- BOTÓN CYBERPUNK -->
            <div class="button-item">
                <button class="btn-cyberpunk">Cyberpunk</button>
                <style>
                    .btn-cyberpunk {
                        background: #000;
                        color: #0ff;
                        padding: 12px 24px;
                        border: 2px solid #0ff;
                        text-transform: uppercase;
                        letter-spacing: 2px;
                        cursor: pointer;
                        position: relative;
                        overflow: hidden;
                    }
                    .btn-cyberpunk::before {
                        content: '';
                        position: absolute;
                        top: 2px;
                        left: -100%;
                        width: 100%;
                        height: 3px;
                        background: #f0f;
                        animation: glitch 1s infinite linear;
                    }
                    @keyframes glitch {
                        0% { left: -100%; }
                        100% { left: 100%; }
                    }
                </style>
            </div>

            <!-- BOTÓN ARCOIRIS -->
            <div class="button-item">
                <button class="btn-rainbow">Arcoiris</button>
                <style>
                    .btn-rainbow {
                        background: linear-gradient(90deg, #ff0000, #ff7f00, #ffff00, #00ff00, #0000ff, #4b0082, #8f00ff);
                        color: white;
                        padding: 12px 24px;
                        border: none;
                        border-radius: 4px;
                        cursor: pointer;
                        background-size: 200% auto;
                        animation: rainbow 3s linear infinite;
                    }
                    @keyframes rainbow { 
                        to { background-position: 200% center; }
                    }
                </style>
            </div>

            <!-- BOTÓN METÁLICO -->
            <div class="button-item">
                <button class="btn-metallic">Metálico</button>
                <style>
                    .btn-metallic {
                        background: linear-gradient(145deg, #c0c0c0, #8c8c8c);
                        color: #fff;
                        padding: 12px 24px;
                        border: none;
                        border-radius: 4px;
                        text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
                        box-shadow: inset 0 0 10px rgba(0,0,0,0.2);
                        cursor: pointer;
                    }
                    .btn-metallic:hover {
                        background: linear-gradient(145deg, #8c8c8c, #c0c0c0);
                    }
                </style>
            </div>

            <!-- BOTÓN PAPEL -->
            <div class="button-item">
                <button class="btn-paper">Papel</button>
                <style>
                    .btn-paper {
                        background: #fff;
                        color: #333;
                        padding: 12px 24px;
                        border: none;
                        box-shadow: 0 1px 3px rgba(0,0,0,0.2);
                        cursor: pointer;
                        position: relative;
                        transition: all 0.3s ease;
                    }
                    .btn-paper::before {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background: linear-gradient(45deg, transparent 45%, #ddd 45%, #ddd 55%, transparent 55%);
                        background-size: 4px 4px;
                        opacity: 0.1;
                    }
                </style>
            </div>

            <!-- BOTÓN FUTURISTA -->
            <div class="button-item">
                <button class="btn-future">Futurista</button>
                <style>
                    .btn-future {
                        background: #222;
                        color: #0ff;
                        padding: 15px 30px;
                        border: none;
                        clip-path: polygon(10% 0, 90% 0, 100% 50%, 90% 100%, 10% 100%, 0 50%);
                        cursor: pointer;
                        transition: all 0.3s ease;
                    }
                    .btn-future:hover {
                        background: #333;
                        transform: scale(1.05);
                        box-shadow: 0 0 15px #0ff;
                    }
                </style>
            </div>

            <!-- BOTÓN BURBUJAS -->
            <div class="button-item">
                <button class="btn-bubble">Burbujas</button>
                <style>
                    .btn-bubble {
                        background: #3498db;
                        color: white;
                        padding: 12px 24px;
                        border: none;
                        border-radius: 4px;
                        cursor: pointer;
                        position: relative;
                        overflow: hidden;
                    }
                    .btn-bubble::before {
                        content: '';
                        position: absolute;
                        width: 100%;
                        height: 100%;
                        background: radial-gradient(circle, transparent 20%, #fff 20%, #fff 22%, transparent 22%);
                        background-size: 15px 15px;
                        top: 0;
                        left: 0;
                        opacity: 0;
                        transition: all 0.5s ease;
                    }
                    .btn-bubble:hover::before {
                        opacity: 0.2;
                        animation: bubbles 0.5s linear;
                    }
                    @keyframes bubbles {
                        0% { transform: scale(0.3); opacity: 0; }
                        50% { opacity: 0.2; }
                        100% { transform: scale(2); opacity: 0; }
                    }
                </style>
            </div>

            <!-- BOTÓN MÁGICO -->
            <div class="button-item">
                <button class="btn-magic">Mágico</button>
                <style>
                    .btn-magic {
                        background: #9b59b6;
                        color: white;
                        padding: 12px 24px;
                        border: none;
                        border-radius: 4px;
                        cursor: pointer;
                        position: relative;
                    }
                    .btn-magic::before, .btn-magic::after {
                        content: '✨';
                        position: absolute;
                        opacity: 0;
                        transition: all 0.3s ease;
                    }
                    .btn-magic::before { left: -20px; }
                    .btn-magic::after { right: -20px; }
                    .btn-magic:hover::before {
                        left: 5px;
                        opacity: 1;
                    }
                    .btn-magic:hover::after {
                        right: 5px;
                        opacity: 1;
                    }
                </style>
            </div>

            <!-- BOTÓN ONDULADO -->
            <div class="button-item">
                <button class="btn-wave">Ondulado</button>
                <style>
                    .btn-wave {
                        background: #2980b9;
                        color: white;
                        padding: 12px 24px;
                        border: none;
                        border-radius: 4px;
                        cursor: pointer;
                        position: relative;
                        overflow: hidden;
                    }
                    .btn-wave::after {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 200%;
                        height: 100%;
                        background: rgba(255,255,255,0.2);
                        transform-origin: 0 0;
                        transform: rotate(45deg) translate(-100%, 0);
                        animation: wave 2s infinite linear;
                    }
                    @keyframes wave {
                        100% { transform: rotate(45deg) translate(100%, 0); }
                    }
                </style>
            </div>

            <!-- BOTÓN PIXEL -->
            <div class="button-item">
                <button class="btn-pixel">Pixel</button>
                <style>
                    .btn-pixel {
                        background: #333;
                        color: white;
                        padding: 12px 24px;
                        border: none;
                        font-family: 'Courier New', monospace;
                        position: relative;
                        cursor: pointer;
                    }
                    .btn-pixel::after {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background: linear-gradient(45deg, transparent 45%, #fff 45%, #fff 55%, transparent 55%);
                        background-size: 4px 4px;
                        opacity: 0.1;
                    }
                </style>
            </div>

            <!-- BOTÓN RIPPLE -->
            <div class="button-item">
                <button class="btn-ripple" onclick="createRipple(event)">Botón Ripple</button>
                <style>
                    .btn-ripple {
                        background: #4CAF50;
                        color: white;
                        padding: 12px 24px;
                        border: none;
                        border-radius: 4px;
                        cursor: pointer;
                        position: relative;
                        overflow: hidden;
                    }
                    .ripple {
                        position: absolute;
                        background: rgba(255, 255, 255, 0.3);
                        border-radius: 50%;
                        transform: scale(0);
                        animation: ripple 0.6s linear;
                        pointer-events: none;
                    }
                    @keyframes ripple {
                        to {
                            transform: scale(4);
                            opacity: 0;
                        }
                    }
                </style>
                <script>
                    function createRipple(event) {
                        const button = event.currentTarget;
                        const ripple = document.createElement('span');
                        const rect = button.getBoundingClientRect();
                        
                        const diameter = Math.max(button.clientWidth, button.clientHeight);
                        ripple.style.width = ripple.style.height = `${diameter}px`;
                        
                        ripple.style.left = `${event.clientX - rect.left - diameter/2}px`;
                        ripple.style.top = `${event.clientY - rect.top - diameter/2}px`;
                        
                        ripple.classList.add('ripple');
                        button.appendChild(ripple);
                        
                        ripple.addEventListener('animationend', () => {
                            ripple.remove();
                        });
                    }
                </script>
            </div>

            <!-- BOTÓN CONTADOR -->
            <div class="button-item">
                <button class="btn-counter" onclick="incrementCounter(this)">Clicks: 0</button>
                <style>
                    .btn-counter {
                        background: #9b59b6;
                        color: white;
                        padding: 12px 24px;
                        border: none;
                        border-radius: 4px;
                        cursor: pointer;
                        transition: all 0.3s ease;
                    }
                    .btn-counter:hover {
                        background: #8e44ad;
                        transform: scale(1.05);
                    }
                </style>
                <script>
                    function incrementCounter(btn) {
                        let count = parseInt(btn.textContent.split(': ')[1]);
                        count++;
                        btn.textContent = `Clicks: ${count}`;
                    }
                </script>
            </div>

            <!-- BOTÓN TOGGLE -->
            <div class="button-item">
                <button class="btn-toggle" onclick="toggleButton(this)">Toggle Me</button>
                <style>
                    .btn-toggle {
                        background: #3498db;
                        color: white;
                        padding: 12px 24px;
                        border: none;
                        border-radius: 4px;
                        cursor: pointer;
                        transition: all 0.3s ease;
                    }
                    .btn-toggle.active {
                        background: #e74c3c;
                    }
                </style>
                <script>
                    function toggleButton(btn) {
                        btn.classList.toggle('active');
                        btn.textContent = btn.classList.contains('active') ? 'Activado' : 'Toggle Me';
                    }
                </script>
            </div>

            <!-- BOTÓN CONFETTI -->
            <div class="button-item">
                <button class="btn-confetti" onclick="launchConfetti(this)">¡Celebrar!</button>
                <style>
                    .btn-confetti {
                        background: #f1c40f;
                        color: white;
                        padding: 12px 24px;
                        border: none;
                        border-radius: 4px;
                        cursor: pointer;
                        transition: all 0.3s ease;
                    }
                    .confetti {
                        position: absolute;
                        width: 10px;
                        height: 10px;
                        background: #f1c40f;
                        pointer-events: none;
                    }
                </style>
                <script>
                    function launchConfetti(btn) {
                        for(let i = 0; i < 50; i++) {
                            createConfetti(btn);
                        }
                    }
                    
                    function createConfetti(btn) {
                        const confetti = document.createElement('div');
                        confetti.classList.add('confetti');
                        
                        const rect = btn.getBoundingClientRect();
                        confetti.style.left = rect.left + rect.width/2 + 'px';
                        confetti.style.top = rect.top + rect.height/2 + 'px';
                        
                        const colors = ['#f1c40f', '#e74c3c', '#3498db', '#2ecc71'];
                        confetti.style.background = colors[Math.floor(Math.random() * colors.length)];
                        
                        document.body.appendChild(confetti);
                        
                        const angle = Math.random() * Math.PI * 2;
                        const velocity = 1 + Math.random() * 5;
                        const tx = Math.cos(angle) * 200;
                        const ty = Math.sin(angle) * 200;
                        
                        confetti.style.transition = 'all 1s ease-out';
                        setTimeout(() => {
                            confetti.style.transform = `translate(${tx}px, ${ty}px) rotate(${Math.random() * 360}deg)`;
                            confetti.style.opacity = '0';
                        }, 0);
                        
                        setTimeout(() => confetti.remove(), 1000);
                    }
                </script>
            </div>

        </div>
    </div>

    <script src="js/buttons.js"></script>
</body>
</html> 