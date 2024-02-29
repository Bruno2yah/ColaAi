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
          <TextInput placeholder='Nome do usuário' style={styles.input}></TextInput>
          <Text style={styles.texto}>Email</Text>
          <TextInput placeholder='Email do usuário' style={styles.input}></TextInput>
          <Text style={styles.texto}>Motivo do Contato</Text>
          <Text style={styles.texto}>Comentário</Text>
          <TextInput placeholder='Escreva sua experiência com o aplicativo, podendo ser sugestões' style={styles.comentario}></TextInput>

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
      flex: 1,
      height: '70%'
    },
    formulario: {
      flex: 1,
      justifyContent: 'flex-start',
    },
    input: {
      marginBottom: 10,
      borderBottomWidth: 2
    },
    comentario: {
      borderWidth: 2,
      borderRadius: 7,
      height: 80
    }
  });

export default ColaAi;