// Navigation.js
import React from 'react';
import { NavigationContainer } from '@react-navigation/native';
import { createStackNavigator } from '@react-navigation/stack';

import Home from '../Home';
import LoginTelefone from '../Login/telefone';
import LoginEmail from '../Login/e-mail';
import CodigoDeAcessoEmail from '../Login/e-mail/CodigoDeAcessoEmail';
import CodigoDeAcessoTelefone from '../Login/telefone/CodigoDeAcessoTelefone';
import Register from '../Register/Register';
import Organizacao from '../Organizacao';
const Stack = createStackNavigator();

export default function Navigation() {
  return (
    <NavigationContainer independent={true}>
      <Stack.Navigator>
        <Stack.Screen name="Organizacao" component={Organizacao} options={{ headerShown: false }} />
        <Stack.Screen name="Home" component={Home} options={{ headerShown: false }} />
        <Stack.Screen name="LoginTelefone" component={LoginTelefone} options={{ headerShown: false }} />
        <Stack.Screen name="LoginEmail" component={LoginEmail} options={{ headerShown: false }} />
        <Stack.Screen name="Register" component={Register} options={{ headerShown: false }} />
        <Stack.Screen name="CodigoDeAcessoEmail" component={CodigoDeAcessoEmail} options={{ headerShown: false }} />
        <Stack.Screen name="CodigoDeAcessoTelefone" component={CodigoDeAcessoTelefone} options={{ headerShown: false }} />

      </Stack.Navigator>
    </NavigationContainer>
  );
}

