import React from 'react';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faHome, faSignInAlt, faUserPlus } from '@fortawesome/free-solid-svg-icons';

const UserHeader = () => {
  return (
    <header className="bg-gray-900 text-white w-full fixed top-0 left-0 z-50">
      <div className="max-w-7xl mx-auto px-4 py-4 flex items-center justify-between">
        {/* Logo */}
        <div className="flex items-center">
          <img
            src="../assets/LogoService.png"
            alt="Logo"
            className="h-10 w-auto"
          />
        </div>

        {/* Botones de navegación */}
        <div className="flex space-x-8">
          <button className="flex items-center text-lg hover:text-gray-400">
            <FontAwesomeIcon icon={faHome} className="mr-2" />
            Home
          </button>
          <button className="flex items-center text-lg hover:text-gray-400">
            <FontAwesomeIcon icon={faSignInAlt} className="mr-2" />
            Login
          </button>
          <button className="flex items-center text-lg hover:text-gray-400">
            <FontAwesomeIcon icon={faUserPlus} className="mr-2" />
            Register
          </button>
        </div>
      </div>
    </header>
  );
};

export default UserHeader;
