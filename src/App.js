import { useState } from "react";

function App() {
  const [color, setColor] = useState("#000000");
  const [opacity, setOpacity] = useState(1);

  const handleColorChange = (event) => {
    setColor(event.target.value);
  };
  const handleOpacityChange = (event) => {
    const opacityValue = Number(event.target.value);

    setOpacity(opacityValue);
  };
  const getOpacityPercentage = () => {
    const opacityPercentage = Math.round(opacity * 100);
    return `${opacityPercentage}%`;
  };
  const getRGB = () => {
    const red = parseInt(color.slice(1, 3), 16);
    const green = parseInt(color.slice(3, 5), 16);
    const blue = parseInt(color.slice(5, 7), 16);

    return `rgb(${red}, ${green}, ${blue})`;
  };

  const getRGBA = () => {
    const red = parseInt(color.slice(1, 3), 16);
    const green = parseInt(color.slice(3, 5), 16);
    const blue = parseInt(color.slice(5, 7), 16);

    return `rgba(${red}, ${green}, ${blue}, ${opacity})`;
  };

  const getHEXA = () => {
    // Mengubah opacity (0-1) menjadi angka 0-255, lalu ke Hex (00-FF)
    const alpha = Math.round(opacity * 255)
      // NOTE: // Kenapa dikali 255? Dalam dunia warna digital (8-bit), nilai maksimal adalah 255. Opacity cuma 0-1, jadi jika opacity 0.5 -> 0.5 * 255 = 127.5.
      .toString(16) // NOTE: Mengubah angka desimal (basis 10) menjadi Hexadecimal (basis 16).
      // NOTE: Contoh: Angka 128 kalau diubah ke Hex menjadi "80". (255 -> ff, 10 -> a)
      .padStart(2, "0") // NOTE: Ini untuk menjaga format agar selalu 2 digit ("e" -> menjadi "0e").
      .toUpperCase(); // NOTE: Mengubah huruf kecil menjadi huruf besar agar terlihat rapi dan standar (ff -> FF).
    return `${color}${alpha}`;
  };

  const getCSSCode = () => {
    const cssCode = `
    background-color = ${color};
    opacity = ${opacity};
    /* Add another style ... */
    `;

    return cssCode.trim();
  };

  return (
    <div className="App">
      <h1>Color Generator</h1>
      <input type="color" value={color} onChange={handleColorChange} />
      <br />
      <input
        type="range"
        min="0"
        max="1"
        step="0.01"
        value={opacity}
        onChange={handleOpacityChange}
      />
      {color && (
        <div
          className="color-box"
          style={{ backgroundColor: color, opacity: opacity }}
        ></div>
      )}
      {color && (
        <div className="color-info">
          <p>Hex: {color}</p>
          <p>Hexa: {getHEXA()}</p>
          <p>RGB: {getRGB()}</p>
          <p>RGBA: {getRGBA()}</p>
          <p>Opacity: {getOpacityPercentage()}</p>
          <pre>
            <code>{getCSSCode()}</code>
          </pre>
        </div>
      )}
    </div>
  );
}

export default App;
