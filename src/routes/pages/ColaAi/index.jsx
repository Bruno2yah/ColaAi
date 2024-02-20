import React from 'react';
import { View, Text, TouchableOpacity, StyleSheet, ImageBackground, ScrollView } from 'react-native';
import * as Animado from 'react-native-animatable';

const ColaAi = ({ navigation }) => {
  return (
      <View style={styles.container}>
        <ImageBackground source={require('../../../../../ColaAi/assets/img/Home/superiorEsquerdo.png')} style={styles.superioresquerdo} /> 
        <ImageBackground source={require('../../../../../ColaAi/assets/img/Home/superiorDireito.png')}style={styles.superiordireito} />
        <ImageBackground source={require('../../../../../ColaAi/assets/img/Home/inferiorEsquerdo.png')}style={styles.inferioresquerdo} />

          <Animado.Text style={styles.titulo} animation="fadeInDown" duration={2000}>Acessar</Animado.Text>
          <Animado.View animation="fadeInRight" delay={500}>
            <TouchableOpacity style={styles.buttonOrganizacao} onPress={() => navigation.navigate('Organizacao')}>
              <Text style={styles.buttonTextOrganizacao}>Organização</Text>
            </TouchableOpacity>
          </Animado.View>
          <Animado.View animation="fadeInRight" delay={1000}>
            <TouchableOpacity style={styles.buttonUsuario} onPress={() => navigation.navigate('Usuario')}>
              <Text style={styles.buttonTextUsuario}>Usuario</Text>
            </TouchableOpacity>
          </Animado.View>
          <TouchableOpacity onPress={() => navigation.navigate('HomeUsuario')}>
            <Text style={styles.linkText}>Acesso sem login</Text>
          </TouchableOpacity>
      </View>
  );
};
// Estilos
const styles = StyleSheet.create({
    container: {
      flex: 1,
      justifyContent: 'center',
      alignItems: 'center',
      backgroundColor: 'white',
    },
    titulo: {
      fontSize: 40,
    },
    buttonTextUsuario: {
      fontSize: 28,
      color: '#6D9EAF',
      textAlign: 'center',
    },
    buttonTextOrganizacao: {
      fontSize: 26,
      color: '#FABDC1',
      textAlign: 'center',
    },
    buttonOrganizacao: {
      backgroundColor: '#6D9EAF',
      padding: 10,
      margin: 10,
      borderRadius: 15,
      width: 200,
      height: 60,
    },
    buttonUsuario: {
      backgroundColor: '#FABDC1',
      padding: 10,
      margin: 10,
      borderRadius: 15,
      width: 200,
      height: 60,
    },
    linkText: {
      fontSize: 16,
      color: 'blue',
      marginTop: 10,
    },
    superioresquerdo: {
      position: 'absolute',
      resizeMode: 'contain',
      top: 0,
      left: 0,
    },
    superiordireito: {
      position: 'absolute',
      resizeMode: 'contain',
      top: 0,
      left: 'auto'
    },
    inferioresquerdo: {
      position: 'absolute',
      resizeMode: 'contain',
      bottom: 0,
      left: 0,
      width: 50
    }
  });

export default ColaAi;