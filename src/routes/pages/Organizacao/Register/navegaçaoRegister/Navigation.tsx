// Navigation.js
import React from 'react';
import { NavigationContainer } from '@react-navigation/native';
import { createStackNavigator } from '@react-navigation/stack';
import Cadastro from '../Etapas/PrimeiraEtapa/Cadastro';
import Cnpj from '../Etapas/PrimeiraEtapa/Cnpj';
import Nome from '../Etapas/PrimeiraEtapa/Nome';
import Email from '../Etapas/PrimeiraEtapa/Email';
import Senha from '../Etapas/PrimeiraEtapa/Senha';
import Cep from '../Etapas/PrimeiraEtapa/Cep'
import Endereco from '../Etapas/PrimeiraEtapa/Endereco'
import TelaFinal from '../Etapas/PrimeiraEtapa/TelaFinal';
import Home from '../../Home';
//SegundaEtapa
import Foto from '../Etapas/SegundaEtapa/Foto';
import Banner from '../Etapas/SegundaEtapa/Banner';
import Descricao from '../Etapas/SegundaEtapa/Descricao';
import TelaFinal2 from '../Etapas/SegundaEtapa/Telafinal2';
const Stack = createStackNavigator();

export default function Navigation() {
  return (
    <NavigationContainer independent={true}>
      <Stack.Navigator initialRouteName="Cadastro" >
        <Stack.Screen name="Cadastro" component={Cadastro}  options={{ headerShown: false }} />
        <Stack.Screen name="Nome" component={Nome}  options={{ headerShown: false }} />
        <Stack.Screen name="Cnpj" component={Cnpj}  options={{ headerShown: false }} />
        <Stack.Screen name="Cep" component={Cep}  options={{ headerShown: false }} />
        <Stack.Screen name="Endereco" component={Endereco}  options={{ headerShown: false }} />
        <Stack.Screen name="Email" component={Email}  options={{ headerShown: false }} />
        <Stack.Screen name="Senha" component={Senha}  options={{ headerShown: false }} />
        <Stack.Screen name="TelaFinal" component={TelaFinal}  options={{ headerShown: false }} />
        <Stack.Screen name="Home" component={Home}  options={{ headerShown: false }} />
        <Stack.Screen name="Foto" component={Foto}  options={{ headerShown: false }} />
        <Stack.Screen name="Banner" component={Banner}  options={{ headerShown: false }} />
        <Stack.Screen name="Descricao" component={Descricao}  options={{ headerShown: false }} />
        <Stack.Screen name="TelaFinal2" component={TelaFinal2}  options={{ headerShown: false }} />
      </Stack.Navigator>
    </NavigationContainer>
  );
}


