import { useState, useEffect } from "react";
import { getSuaraSatu, getSuaraDua, getSuaraTiga } from "../services/suara";

export default function SuaraComponent() {
  const imgPaslon = '/surat-suara.png';

  const [suaraSatuData, setSuaraSatuData] = useState(0); // Set default value to 0
  const [suaraDuaData, setSuaraDuaData] = useState(0); // Set default value to 0
  const [suaraTigaData, setSuaraTigaData] = useState(0); // Set default value to 0

  useEffect(() => {
    async function fetchData() {
      try {
        const dataSuaraSatu = await getSuaraSatu();
        setSuaraSatuData(dataSuaraSatu); 

        const dataSuaraDua = await getSuaraDua();
        setSuaraDuaData(dataSuaraDua); 

        const dataSuaraTiga = await getSuaraTiga();
        setSuaraTigaData(dataSuaraTiga);
      } catch (error) {
        console.error('Error fetching data:', error);
      }
    }

    fetchData();

    // Panggil API setiap 10 detik
    // const interval = setInterval(fetchData, 3000);

    // Bersihkan interval pada unmount
    // return () => clearInterval(interval);
  }, []);

  return (
    <div className="col-lg-4 d-flex align-items-center justify-content-center">
      <div className="card">
        <div className="card-body text-center" style={{ position: 'relative' }}>
          <img src={imgPaslon} alt="" style={{ width: '37rem' }} />
          <div>
            {/* Menampilkan hanya nilai data */}
            <h3 className="suara1">{suaraSatuData} Mawar</h3>
            <h3 className="suara2">{suaraDuaData} Mawar</h3>
            <h3 className="suara3">{suaraTigaData} Mawar</h3>
          </div>
        </div>
      </div>
    </div>
  );
}
