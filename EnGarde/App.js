import React, { useState, createContext, useContext } from 'react';
import { BrowserRouter as Router, Route, Redirect, Switch } from 'react-router-dom';

import Home from './components/Home';
import Login from './components/Login';
import Dashboard from './components/Dashboard';
import PrivateRoute from './components/PrivateRoute';

const AuthContext = createContext();

const App = () => {
  const [user, setUser] = useState(null);

  const login = (username, password) => {
    // Replace this with actual authentication logic
    if (username === 'demo' && password === 'password') {
      setUser({ username });
    }
  };

  const logout = () => {
    setUser(null);
  };

  return (
    <AuthContext.Provider value={{ user, login, logout }}>
      <Router>
        <Switch>
          <Route path="/" exact component={Home} />
          <Route path="/login" component={Login} />
          <PrivateRoute path="/dashboard" component={Dashboard} />
        </Switch>
      </Router>
    </AuthContext.Provider>
  );
};

export default App;