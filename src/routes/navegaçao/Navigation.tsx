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
        <Stack.Screen
          name="ColaAi"
          component={ColaAi}
          options={{ headerShown: false }}
        />
        <Stack.Screen
          name="Organizacao"
          component={Organizacao}
          options={{ headerShown: false }}
        />
        <Stack.Screen
          name="Usuario"
          component={Usuario}
          options={{ headerShown: false }}
        />
        <Stack.Screen
          name="Home"
          component={Home}
          options={{ headerShown: false }}
        />
        <Stack.Screen
          name="AcessoSemLogin"
          component={AcessoSemLogin}
          options={{ headerShown: false }}
        />
      </Stack.Navigator>
    </NavigationContainer>
  );
}