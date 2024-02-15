import React from 'react';
import { View, Text, TouchableOpacity, StyleSheet } from 'react-native';
import * as Animado from 'react-native-animatable';

const ColaAi = ({ navigation }) => {
  return (
    <View style={styles.container}>
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
      <TouchableOpacity onPress={() => navigation.navigate('AcessoSemLogin')}>
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
  });

export default ColaAi;