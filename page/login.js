import { useState } from "react";
import { useRouter } from "next/router";
import Navbar from "../components/Navbar";

export default function Login() {
  const [user, setUser] = useState("");
  const [pass, setPass] = useState("");
  const router = useRouter();

  const handleLogin = (e) => {
    e.preventDefault();
    if (user === "admin" && pass === "12345") {
      router.push("/admin/dashboard");
    } else {
      alert("Username atau Password salah!");
    }
  };

  return (
    <>
      <Navbar />
      <div className="container mt-5" style={{ maxWidth: "400px" }}>
        <h3 className="text-center">Login Admin</h3>
        <form onSubmit={handleLogin}>
          <div className="mb-3">
            <label className="form-label">Username</label>
            <input type="text" className="form-control" value={user} onChange={(e) => setUser(e.target.value)} />
          </div>
          <div className="mb-3">
            <label className="form-label">Password</label>
            <input type="password" className="form-control" value={pass} onChange={(e) => setPass(e.target.value)} />
          </div>
          <button type="submit" className="btn btn-primary w-100">Login</button>
        </form>
      </div>
    </>
  );
}
