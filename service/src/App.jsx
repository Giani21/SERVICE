// src/App.jsx
import React from 'react';
import { BrowserRouter as Router, Route, Routes } from 'react-router-dom';
import UserHeader from './components/headers/UserHeader';
import Home from './pages/Home';
import './App.css';

const App = () => {
  return (
    <Router>
      <UserHeader />
      <div className="min-h-screen bg-gray-900 text-white">
        <Routes>
          <Route path="/" element={<Home />} />
        </Routes>
      </div>
    </Router>
  );
};

export default App;
