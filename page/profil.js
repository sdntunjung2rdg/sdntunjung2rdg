import Navbar from "../components/Navbar";

export default function Profil() {
  return (
    <>
      <Navbar />
      <div className="container mt-5">
        <h2>Profil Sekolah</h2>
        <h4>Visi</h4>
        <p>Mewujudkan generasi cerdas, berkarakter, dan berprestasi.</p>
        <h4>Misi</h4>
        <ul>
          <li>Meningkatkan kualitas pembelajaran.</li>
          <li>Membentuk siswa berakhlak mulia.</li>
          <li>Meningkatkan prestasi akademik dan non-akademik.</li>
        </ul>
        <h4>Sejarah</h4>
        <p>SDN Tunjung 02 Raduagung berdiri sejak ...</p>
      </div>
    </>
  );
}
