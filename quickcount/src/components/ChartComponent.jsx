import { useState, useEffect } from 'react';
import ReactApexChart from 'react-apexcharts';
import { getSuaraSatu, getSuaraDua, getSuaraTiga } from "../services/suara";

const ChartComponent = () => {
  const [suaraSatuData, setSuaraSatuData] = useState(0);
  const [suaraDuaData, setSuaraDuaData] = useState(0);
  const [suaraTigaData, setSuaraTigaData] = useState(0);

  useEffect(() => {
    const fetchData = async () => {
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
    };

    fetchData();

    // Panggil API setiap 10 detik
    const interval = setInterval(fetchData, 5000);

    // Bersihkan interval pada unmount
    return () => clearInterval(interval);
  }, []);

  const options = {
    chart: {
      width: 380,
      type: 'pie',
    },
    labels: ['Anis Imin', 'Prabowo Gibran', 'Ganjar Mahfud'],
    colors: ['#61c56f', '#7ed7c1', '#dc8686'],
    legend: {
      labels: {
        colors: ['#61c56f', '#7ed7c1', '#dc8686'],
        style: {
          fontSize: '24px' // Ubah ukuran font keterangan di sini
        }
      }
    },
    responsive: [{
      breakpoint: 480,
      options: {
        chart: {
          width: 200
        },
        legend: {
          position: 'bottom'
        }
      }
    }]
  };

  const series = [suaraSatuData, suaraDuaData, suaraTigaData];

  return (
    <div>
      <div id="chart">
        <ReactApexChart options={options} series={series} type="pie" width={700} />
      </div>
      <div id="html-dist"></div>
    </div>
  );
}

export default ChartComponent;
