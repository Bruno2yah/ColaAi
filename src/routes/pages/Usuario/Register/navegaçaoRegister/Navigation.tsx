// Navigation.js
import React from 'react';
import { NavigationContainer } from '@react-navigation/native';
import { createStackNavigator } from '@react-navigation/stack';
import Cadastro from '../Etapas/PrimeiraEtapa/Cadastro';
import Nome from '../Etapas/PrimeiraEtapa/Nome';
import SobreNome from '../Etapas/PrimeiraEtapa/SobreNome';
import Email from '../Etapas/PrimeiraEtapa/Email';
import CodigoDeAcessoEmail from '../Etapas/PrimeiraEtapa/CodigoDeAcessoEmail';
import Telefone from '../Etapas/PrimeiraEtapa/Telefone'
import CodigoDeAcessoTelefone from '../Etapas/PrimeiraEtapa/CodigoDeAcessoTelefone';
import Senha from '../Etapas/PrimeiraEtapa/Senha';
import TelaFinal from '../Etapas/PrimeiraEtapa/TelaFinal';
import Home from '../../Home';
//SegundaEtapa
import Foto from '../Etapas/SegundaEtapa/Foto';
import Banner from '../Etapas/SegundaEtapa/Banner';

import TelaFinal2 from '../Etapas/SegundaEtapa/Telafinal2';
const Stack = createStackNavigator();

/*export default function Navigation() {
  return (
    <NavigationContainer independent={true}>
      <Stack.Navigator initialRouteName="Cadastro" >
        <Stack.Screen name="Cadastro" component={Cadastro}  options={{ headerShown: false }} />
        <Stack.Screen name="Nome" component={Nome}  options={{ headerShown: false }} />
        <Stack.Screen name="SobreNome" component={SobreNome}  options={{ headerShown: false }} />
        <Stack.Screen name="Email" component={Email}  options={{ headerShown: false }} />
        <Stack.Screen name="CodigoDeAcessoEmail" component={CodigoDeAcessoEmail}  options={{ headerShown: false }} />
        <Stack.Screen name="Telefone" component={Telefone}  options={{ headerShown: false }} />
        <Stack.Screen name="CodigoDeAcessoTelefone" component={CodigoDeAcessoTelefone}  options={{ headerShown: false }} />
        <Stack.Screen name="Senha" component={Senha}  options={{ headerShown: false }} />
        <Stack.Screen name="TelaFinal" component={TelaFinal}  options={{ headerShown: false }} />
        <Stack.Screen name="Home" component={Home}  options={{ headerShown: false }} />
        <Stack.Screen name="Foto" component={Foto}  options={{ headerShown: false }} />
        <Stack.Screen name="Banner" component={Banner}  options={{ headerShown: false }} />
        <Stack.Screen name="TelaFinal2" component={TelaFinal2}  options={{ headerShown: false }} />
      </Stack.Navigator>
    </NavigationContainer>
  );
}*/


