import React, { useContext } from 'react';
import { AuthContext } from '../App';

const Dashboard = () => {
  const { user, logout } = useContext(AuthContext);

  return (
    <div>
      <h2>Dashboard Page</h2>
      <p>Welcome, {user && user.username}!</p>
      <button onClick={logout}>Logout</button>
    </div>
  );
};

export default Dashboard;