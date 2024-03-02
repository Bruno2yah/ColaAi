import {View, Image, StyleSheet, Pressable } from 'react-native';

export default function navBar() {
  return (
    <View style={styles.container}>
        <View style={styles.buttonsArea}>
            <View style={styles.buttons}>
                <View style={{ justifyContent: 'center', alignItems: 'center',}}>
                <Pressable style={styles.buttonNav} >
                    <Image
                        style={{width: 61, height: 61, tintColor: '#FFD932'}}
                        source={require('../../../assets/img/NavBar/home.png')}
                    />
                    </Pressable>
                </View>
                <View style={{ justifyContent: 'center', alignItems: 'center',}}>
                    <Pressable style={styles.buttonNav} >
                        <Image
                            style={{width: 59, height: 59, tintColor: '#A6A6A6'}}
                            source={require('../../../assets/img/NavBar/ingressos.png')}
                        />
                    </Pressable>
                </View>
                <View style={{ justifyContent: 'center', alignItems: 'center',}}>
                    <Pressable style={styles.buttonNav} >
                        <Image
                            style={{width: 61, height: 61, tintColor: '#A6A6A6'}}
                            source={require('../../../assets/img/NavBar/local.png')}
                        />
                    </Pressable>
                </View>
                <View style={{ justifyContent: 'center', alignItems: 'center',}}>
                    <Pressable style={styles.buttonNav} >
                        <Image
                            style={{width: 61, height: 61, tintColor: '#A6A6A6'}}
                            source={require('../../../assets/img/NavBar/notif.png')}
                        />
                    </Pressable>
                </View>
                <View style={{ justifyContent: 'center', alignItems: 'center',}}>
                    <Pressable style={styles.buttonNav} >
                        <Image
                            style={{width: 61, height: 61, tintColor: '#A6A6A6'}}
                            source={require('../../../assets/img/NavBar/perfil.png')}
                        />
                    </Pressable>
                </View>
            </View>
        </View>
    </View>
  );
}

const styles = StyleSheet.create({
    container: {
        backgroundColor: '#fff',
        overflow: "hidden",
        width: '100%',
        position: 'relative',
        bottom: 0,
        justifyContent: 'center',
        alignItems: 'center',
        alignSelf : 'flex-end',
    },

    buttonsArea: {
        flexDirection:'row',
        width: '90%',
        alignSelf: 'center',
        position: 'relative',
        justifyContent: 'center',
        alignItems: 'center',
    },

    buttons: {
        flex: 1,
        flexDirection:'row',
        justifyContent:'space-between',
        alignItems: 'center',
        alignSelf: 'center',
    },
})