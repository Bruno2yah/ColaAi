//npm install react-native-vector-icons


import React, { useState } from 'react';
import { View, Text, TouchableOpacity, StyleSheet } from 'react-native';
import * as Animado from 'react-native-animatable';

export default function Usuario({ navigation }) {
  const [showLoginForm, setShowLoginForm] = useState(false);
  const [selectedForm, setSelectedForm] = useState(0);

  const handleButtonPress = (buttonNumber) => {
    setShowLoginForm(true);

    if (buttonNumber === 1) {
      setSelectedForm(1);
      navigation.navigate('LoginEmail');
    } else if (buttonNumber === 2) {
      setSelectedForm(2);
      navigation.navigate('LoginTelefone');
    } else if (buttonNumber === 3) {
      setSelectedForm(3);
      navigation.navigate('Register');
    } else if (buttonNumber === 0) {
      setSelectedForm(0);
      navigation.navigate('Google');

    } else {
      setShowLoginForm(false);
    }
  };

  return (
    <View style={styles.container}>
      <Animado.Text style={styles.title} animation="fadeInRight">Bem vindo(a)!</Animado.Text>
      <Animado.Text style={styles.description} animation="fadeInRight">
        Entre com a sua conta e desfrute de todos os benefícios do Cola Aí.
      </Animado.Text>
      <View style={styles.buttonContainer}>
        <View style={styles.buttonColumn}>
          <Animado.View animation="fadeInRight" delay={500} duration={800}>
            <TouchableOpacity style={styles.button2} onPress={() => handleButtonPress(0)}>
              <Text style={styles.buttonText}>Entrar com google</Text>
            </TouchableOpacity>
          </Animado.View>
          <Animado.View animation="fadeInRight" delay={1000} duration={800}>
            <TouchableOpacity style={styles.button1} onPress={() => handleButtonPress(1)}>
              <Text style={styles.buttonText}>Entrar com e-mail</Text>
            </TouchableOpacity>
          </Animado.View>
          <Animado.View animation="fadeInRight" delay={1500} duration={800}>
            <TouchableOpacity style={styles.button2} onPress={() => handleButtonPress(2)}>
              <Text style={styles.buttonText}>Entrar com telefone</Text>
            </TouchableOpacity>
          </Animado.View>
          <TouchableOpacity onPress={() => handleButtonPress(3)}>
            <Text style={styles.linkText}>Cadastre-se</Text>
          </TouchableOpacity>
        </View>
      </View>
    </View>
  );
}

  const buttonStyle = {
    padding: 10,
    margin: 10,
    borderRadius: 10,
    width: 300,
    height: 50,
  };

  const styles = StyleSheet.create({
    container: {
      flex: 1,
      justifyContent: "center",
      alignItems: "center",
      backgroundColor: "white",
    },
    title: {
      fontSize: 24,
      fontWeight: "bold",
      marginBottom: 10,
    },
    description: {
      fontSize: 16,
      textAlign: "center",
      marginBottom: 20,
    },
    buttonContainer: {
      width: "80%",
    },
    buttonColumn: {
      flexDirection: "column",
      alignItems: "center",
    },
    buttonText: {
      fontSize: 22,
      textAlign: "center",
    },
    button1: {
      ...buttonStyle,
      backgroundColor: "#6D9EAF",
    },
    button2: {
      ...buttonStyle,
      backgroundColor: "#E6AEB2",
    },
    inputContainer: {
      width: '90%',
      marginTop: 20,
    },
    label: {
      color: '#666',
      marginTop: 10,
    },
    input: {
      textAlign: 'center',
      borderBottomWidth: 1,
      borderBottomColor: '#aaa',
      fontSize: 16,
      marginBottom: 10,
    },
    linkText: {
      fontSize: 16,
      color: 'blue',
      marginTop: 10,
    },
  });