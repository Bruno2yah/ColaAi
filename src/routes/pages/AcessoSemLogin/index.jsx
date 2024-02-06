import React from 'react';
import { View, Text, TouchableOpacity, StyleSheet } from 'react-native';
export default function AcessoSemLogin({ navigation }) {
  
  return (
    <View style={styles.container}>
      <Text style={styles.title}>Bem vindo(a)!</Text>
      <Text style={styles.description}>
        Entre com a sua conta e desfrute de todos os benefícios do Cola Aí.
      </Text>
      <View style={styles.buttonContainer}>
        <View style={styles.buttonColumn}>
          <TouchableOpacity
            style={styles.button2}
            onPress={() => navigation.navigate('Home')}
          >
            <Text style={styles.buttonText2}>Entrar como convidado</Text>
          </TouchableOpacity>
        </View>
      </View>
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
    backgroundColor: 'white',
  },
  title: {
    fontSize: 24,
    fontWeight: 'bold',
    marginBottom: 10,
  },
  description: {
    fontSize: 16,
    textAlign: 'center',
    marginBottom: 20,
  },
  buttonContainer: {
    width: '80%',
  },
  buttonColumn: {
    flexDirection: 'column',
    alignItems: 'center',
  },
  buttonText2: {
    fontSize: 22,
    color: '#6D9EAF',
    textAlign: 'center',
  },
  button2: {
    backgroundColor: '#FABDC1',
    padding: 10,
    margin: 10,
    borderRadius: 10,
    width: 260,
    height: 50,
  },
});