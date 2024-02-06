// Navigation.js
import React from 'react';
import { NavigationContainer } from '@react-navigation/native';
import { createStackNavigator } from '@react-navigation/stack';
import Organizacao from '../pages/Organizacao/index';
import Usuario from '../pages/Usuario/index';
import Home from '../pages/Usuario/Home';
import AcessoSemLogin from '../pages/AcessoSemLogin';
import ColaAi from '../pages/ColaAi';
const Stack = createStackNavigator();

export default function Navigation() {
  return (
    <NavigationContainer>
      <Stack.Navigator>
        <Stack.Screen name="ColaAi" component={ColaAi} />
        <Stack.Screen name="Organizacao" component={Organizacao} />
        <Stack.Screen name="Usuario" component={Usuario} />
        <Stack.Screen name="Home" component={Home} />
        <Stack.Screen name="AcessoSemLogin" component={AcessoSemLogin} />
      </Stack.Navigator>
    </NavigationContainer>
  );
}

