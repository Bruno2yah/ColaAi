import React from 'react';
import { View, Text, TouchableOpacity, StyleSheet, ImageBackground, ScrollView, Image, TextInput, } from 'react-native';
import * as Animado from 'react-native-animatable';
import NavBar from '../../../../src/Components/NavBar/navbar';

const ColaAi = ({ navigation }) => {
  return (
      <View style={styles.container}>

        <View style={styles.contato}>
          <Text style={styles.titulo}>Contato</Text>
          <Text style={styles.texto}>Entre em contato com a nossa equipe de colaboradores e seja atendido por profissionais capacitados e interessados para oferecer a melhor vivência no Cola Aí</Text>
        </View>

        <View style={styles.formulario}>
          <Text style={styles.texto}>Nome</Text>
          <TextInput placeholder='Nome do usuário' placeholderTextColor={'grey'} style={styles.input}></TextInput>
          <Text style={styles.texto}>Email</Text>
          <TextInput placeholder='Email do usuário' placeholderTextColor={'grey'} style={styles.input}></TextInput>
          <Text style={styles.texto}>Motivo do Contato</Text>
          <Text style={styles.texto}>Comentário</Text>
          <TextInput placeholder='Descreva o motivo do seu contato' placeholderTextColor={'grey'} style={styles.comentario}></TextInput>

        </View>
      <NavBar/>
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
      padding: 20
    },
    titulo: {
      fontSize: 40,
      fontWeight: 'bold',
      color: 'grey'
    },
    texto: {
      fontSize: 20,
      color: 'grey'
    },
    contato: {
      flex: 0.5,
      height: '70%'
    },
    formulario: {
      flex: 1,
      justifyContent: 'flex-start',
      width: '80%'
    },
    input: {
      marginBottom: 10,
      borderBottomWidth: 2,
      borderColor: 'grey'
    },
    comentario: {
      borderWidth: 2,
      borderRadius: 7,
      height: 80,
      borderColor: 'grey'
    }
  });

export default ColaAi;